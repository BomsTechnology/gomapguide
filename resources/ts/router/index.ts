import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";

const Home = () => import("@/views/front/Home.vue");
const NavBar = () => import("@/components/NavBar.vue");
const Footer = () => import("@/components/Footer.vue");
const Sidebar = () => import("@/components/SideBar.vue");

declare module "vue-router" {
    interface RouteMeta {
        title: string;
        isAdmin?: boolean;
        requiresAuth?: boolean;
    }
}

const siteName = "MapGuide";

const routes: Array<RouteRecordRaw> = [
    // front office routes
    {
        path: "/",
        name: "home",
        components: {
            default: Home,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: siteName + " - Accueil",
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
            return {
                el: to.hash,
                behavior: "smooth",
            };
        } else if (savedPosition) {
            return savedPosition;
        } else {
            return { top: 0 };
        }
    },
});

// router.beforeEach((to, from, next) => {
//     const authenticateStore = useAuthenticateStore();

//     if (
//         to.meta.isAdmin &&
//         (!authenticateStore.user || authenticateStore.user.type != "admin") &&
//         to.meta.requiresAuth &&
//         !authenticateStore.token
//     ) {
//         next({ name: "login.admin" });
//     } else if (to.meta.requiresAuth && !authenticateStore.token) {
//         next({ name: "login" });
//     } else {
//         next();
//     }
// });

router.afterEach((to) => {
    document.title = to.meta.title;
});

export default router;
