import Vuex from "vuex"
import Vue from "vue"
import Vapi from "vuex-rest-api"

Vue.use(Vuex);

const api = new Vapi({
        baseURL: "http://127.0.0.1:8000/api",
        state: {
            notifications: [],
            podcasts: []
        }
    })

    .get({
        action: "getNotification",
        property: "notification",
        path: ({ id }) => `/notifications/${id}`
    })
    .get({
        action: "listNotifications",
        property: "notifications",
        path: "/notifications"
    })
    .post({
        action: "updateNotification",
        property: "notification",
        path: ({ id }) => `/notifications/${id}`
    })

    .get({
        action: "getPodcast",
        property: "podcast",
        path: ({ id }) => `/podcasts/${id}`
    })
    .get({
        action: "listPodcasts",
        property: "podcasts",
        path: "/podcasts"
    })
    .post({
        action: "updatePodcast",
        property: "podcast",
        path: ({ id }) => `/podcasts/${id}`
    })
    .getStore();


api.namespaced = true;

export default new Vuex.Store({modules:{api: api}});

