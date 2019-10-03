<template>
    <div class="container py-6">
        <div class="row">
            <div class="col-3">
                <router-link :class="filterClass('category:' + filter.id, ['btn-info text-light'], ['btn-light'])"
                             :to="{ name: 'notifications', query: {'filter': 'category:' + filter.id}}"
                             v-bind:key="filter.id" v-for="filter in categories"
                             class="btn btn-md w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">{{ filter.name | trans | ucfirst }}</span>
                    <span class="badge badge-light">{{ filter.count }}</span>
                    <span class="sr-only">unread messages</span>
                </router-link>

                <router-link :class="filterClass('all', ['font-weight-bold'], ['text-muted'])"
                             :to="{name: 'notifications', query: {filter: 'all'}}"
                             class="btn btn-md btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <small>{{'messages.all notifications' | trans | ucfirst }}</small>
                </router-link>

                <hr/>

                <router-link :class="filterClass('podcast:' + filter.id, ['font-weight-bold'], ['text-muted'])"
                             :to="{ name: 'notifications', query: {'filter': 'podcast:' + filter.id}}"
                             v-bind:key="filter.id" v-for="filter in podcasts"
                             class="btn btn-sm btn-light w-100 text-left mb-1 d-flex align-items-center">
                    <span class="flex-grow-1">{{ filter.name }}</span>
                    <span class="badge">{{ filter.count }}</span>
                    <span class="sr-only">unread messages</span>
                </router-link>
            </div>

            <div class="col">
                <template v-if="hasMessagesForFilter">
                <notification-list v-bind:key="podcast + '_list'"
                                   :messages="messages"
                                   :podcast="getPodcastById(podcast)"
                                   v-for="(messages, podcast) in filteredGroupedByPodcast"/>
                </template>
                <p v-else>No Messages</p>
            </div>
        </div>
    </div>
</template>

<script>
  import NotificationList from "../components/NotificationList";

  export default {
    name: 'Notifications',
    components: {NotificationList},
    mounted() {
      // inject dummy data for local test

      const that = this;

      const addMessage = function (iiii) {
        const max = 3 + Math.round(Math.random() * 8);
        const uuid = 'xxxx-xxxx-xxxx-' + iiii;

        for (let i = 0; i < max; i++) {
          const id = 'xxxx-xxxx-' + (1000 + i) + '-' + iiii;
          that.messages.push({
            id: id,
            podcast: uuid,
            title: 'Cras justo odio',
            meta: {
              read: false,
              bookmarked: false,
            }
          })
        }
      };

      addMessage(1111);
      addMessage(2222);
    },
    data() {
      return {
        filters: [
          {
            id: 'unread',
            type: 'category',
            name: 'messages.unread',
            count: Math.round(3 + Math.random() * 30),
          },
          {
            id: 'read',
            type: 'category',
            name: 'messages.read',
            count: Math.round(3 + Math.random() * 30),
          },
          {
            id: 'bookmarked',
            type: 'category',
            name: 'messages.bookmarked',
            count: Math.round(3 + Math.random() * 30),
          },

          {
            id: 'xxxx-xxxx-xxxx-1111',
            type: 'podcast',
            name: 'My Podcast',
            count: Math.round(3 + Math.random() * 30),
          },
          {
            id: 'xxxx-xxxx-xxxx-2222',
            type: 'podcast',
            name: 'Team Name / Podcast Name',
            count: Math.round(3 + Math.random() * 30),
          }
        ],
        messages: []
      }
    },
    computed: {
      total() {
        return this.messages.length;
      },

      currentFilter() {
        return this.$route.query.filter || 'category:unread';
      },

      currentFilterProps() {
        let props = {
          all: false,
          category: null,
          podcast: null,
        };
        const segments = this.currentFilter.split(',');
        segments.forEach((el) => {
          const [key, value] = el.split(':');
          props[key] = typeof value === 'undefined' ? true : value;
        });
        return props;
      },

      categories() {
        return this.filters.filter((el) => el.type === 'category');
      },

      podcasts() {
        return this.filters.filter((el) => el.type === 'podcast');
      },

      filteredGroupedByPodcast() {
        let buckets = {};
        this.filteredMessages.forEach((el) => {
          if (!buckets[el.podcast]) {
            buckets[el.podcast] = [];
          }
          buckets[el.podcast].push(el);
        });

        return buckets;
      },

      filteredMessages() {
        if (this.currentFilterProps.all === true) {
          return this.messages;
        }

        let filtered = [];
        let exists = [];

        const addToFiltered = function (el) {
          if (exists.includes(el.id)){ return; }
          filtered.push(el);
          exists.push(el.id);
        };

        if (this.currentFilterProps.category !== null) {
          const cat = this.currentFilterProps.category;
          if (cat === 'unread') {
            this.messages.filter((el) => {
              return el.meta.read === false;
            }).forEach(addToFiltered);
          } else if (cat === 'read') {
            this.messages.filter((el) => {
              return el.meta.read === true;
            }).forEach(addToFiltered);
          } else if (cat === 'bookmarked') {
            this.messages.filter((el) => {
              return el.meta.bookmarked === true;
            }).forEach(addToFiltered);
          }
        }

        if (this.currentFilterProps.podcast !== null) {
          const podcast = this.currentFilterProps.podcast;
          this.messages.filter((el) => {
            return el.podcast === podcast;
          }).forEach(addToFiltered);
        }

        return filtered;
      },

      hasMessagesForFilter() {
        return this.filteredMessages.length > 0;
      }
    },
    methods: {
      getPodcastById (id) {
        return this.podcasts.find((el => el.id === id));
      },
      filterClass(filter = '', is = [], not = []) {
        return (this.currentFilter === filter) ? is : not
      },
    }
  }
</script>
