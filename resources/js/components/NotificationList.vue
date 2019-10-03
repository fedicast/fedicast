<template>
    <div v-if="hasMessages" class="card mb-4">
        <div class="card-header py-2 d-flex align-items-center">
            <strong class="flex-grow-1 m-0">{{ podcast.name }}</strong>
            <a href="#" class="btn btn-xs btn-outline-dark">✔</a>
        </div>
        <ul class="list-group list-group-flush">
            <li v-bind:key="message.id" v-for="message in messages" class="list-group-item d-flex align-items-center">
                <span class="flex-grow-1">{{ message.title }}</span> <a href="#" class="btn btn-xs btn-outline-dark">✔</a>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
      name: 'notification-list',
      props: {
        podcast: {
          type: Object,
          required: true,
          default () {
            return {name: 'Untiled'};
          },
        },
        messages: {
          type: Array,
          default () {
            return [];
          }
        }
      },
      data () {return{
        title: 'Podcast Name',
      }},
      computed: {
        hasMessages () {
          return this.messages.length > 0;
        }
      },
    }
</script>
