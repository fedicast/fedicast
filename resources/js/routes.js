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


export default [
    {
        path: '/~/',
        name: 'overview',
        components: {
            default: Overview,
            subNavigation: AccountSubNavigation,
        }
    },
    {
        path: '/~/podcasts',
        name: 'podcasts',
        components: {
            default: Podcasts,
            subNavigation: AccountSubNavigation,
        }
    },
    {
        path: '/~/domains',
        name: 'domains',
        components: {
            default: Domains,
            subNavigation: AccountSubNavigation,
        }
    },
    {
        path: '/~/usage',
        name: 'usage',
        components: {
            default: Usage,
            subNavigation: AccountSubNavigation,
        }
    },
    {
        path: '/~/notifications',
        name: 'notifications',
        components: {
            default: Notifications,
            subNavigation: NotificationsSubNavigation,
        }
    },
    {
        path: '/~/activity',
        name: 'activity',
        components: {
            default: Activity,
            subNavigation: ActivitySubNavigation,
        }
    },
    {
        path: '/~/account',
        name: 'settings',
        components: {
            default: Settings,
            subNavigation: SettingsSubNavigation,
        },
        children: [
            {path: 'billing', 'name': 'settings.billing', component: SettingsBilling},
            {path: 'plan', 'name': 'settings.plan', component: SettingsPlan},
        ]
    },
]
