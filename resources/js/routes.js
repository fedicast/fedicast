import Activity from './views/Activity'
import Notifications from './views/Notifications'
import Overview from './views/Overview'
import Podcasts from './views/Podcasts'
import Settings from './views/Settings'
import SettingsBilling from './views/SettingsBilling'
import SettingsPlan from './views/SettingsPlan'
import Usage from './views/Usage';
import Domains from './views/Domains';
import AccountSubNavigation from './views/partials/sub-navigation/Account'
import SettingsSubNavigation from './views/partials/sub-navigation/Settings'
import NotificationsSubNavigation from './views/partials/sub-navigation/Notifications';
import ActivitySubNavigation from './views/partials/sub-navigation/Activity';
import CreatePodcast from './views/podcast/Create';

import EmptyRouterView from './views/EmptyRouterView';

export default [
    {
        path: '/~',
        component: EmptyRouterView,
        children: [
            {
                path: '',
                name: 'overview',
                components: {
                    default: Overview,
                    subNavigation: AccountSubNavigation,
                },
            },
            {
                path: 'podcasts',
                components: {
                    default: EmptyRouterView,
                    subNavigation: AccountSubNavigation,
                },
                children: [
                    {
                        path: '',
                        name: 'podcasts',
                        component: Podcasts
                    },
                    {
                        path: 'create',
                        name: 'podcasts.create',
                        component: CreatePodcast
                    },
                ]
            },
            {
                path: 'domains',
                name: 'domains',
                components: {
                    default: Domains,
                    subNavigation: AccountSubNavigation,
                }
            },
            {
                path: 'usage',
                name: 'usage',
                components: {
                    default: Usage,
                    subNavigation: AccountSubNavigation,
                }
            },
            {
                path: 'notifications',
                name: 'notifications',
                components: {
                    default: Notifications,
                    subNavigation: NotificationsSubNavigation,
                }
            },
            {
                path: 'activity',
                name: 'activity',
                components: {
                    default: Activity,
                    subNavigation: ActivitySubNavigation,
                }
            },
            {
                path: 'account',
                components: {
                    default: EmptyRouterView,
                    subNavigation: SettingsSubNavigation,
                },
                children: [
                    {path: '', name: 'settings', component: Settings},
                    {path: 'billing', 'name': 'settings.billing', component: SettingsBilling},
                    {path: 'plan', 'name': 'settings.plan', component: SettingsPlan},
                ]
            },
        ]
    },

]
