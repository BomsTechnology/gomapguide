import { createRouter, createWebHistory, RouteRecordRaw } from "vue-router";

const Home = () => import("@/views/front/Home.vue");
const NavBar = () => import("@/components/NavBar.vue");
const Footer = () => import("@/components/Footer.vue");
const Plan = () => import("@/views/front/Plan.vue");
const Contact = () => import("@/views/front/Contact.vue");
const About = () => import("@/views/front/About.vue");
const LegacyNotice = () => import("@/views/front/LegacyNotice.vue");
const Payment = () => import("@/views/front/Payment.vue");
const PrivacyPolicy = () => import("@/views/front/PrivacyPolicy.vue");
const TermsSales = () => import("@/views/front/TermsSales.vue");
const TermsService = () => import("@/views/front/TermsService.vue");
const Sidebar = () => import("@/components/SideBar.vue");

declare module "vue-router" {
    interface RouteMeta {
        title: string;
        isAdmin?: boolean;
        requiresAuth?: boolean;
    }
}

const prefix: string = "Canada | SEO ° Référencement Google | MapGuide";
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
            title: prefix + " - Accueil",
        },
    },
    {
        path: "/plan",
        name: "plan",
        components: {
            default: Plan,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - Nos Plans",
        },
    },
    {
        path: "/contact",
        name: "contact",
        components: {
            default: Contact,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - Contact",
        },
    },
    {
        path: "/about",
        name: "about",
        components: {
            default: About,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - A Propos",
        },
    },
    {
        path: "/legacy-notice",
        name: "legacy-notice",
        components: {
            default: LegacyNotice,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - Mentions Légales",
        },
    },
    {
        path: "/privacy-policy",
        name: "privacy-policy",
        components: {
            default: PrivacyPolicy,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - Politique de confidentialité ",
        },
    },
    {
        path: "/terms-sales",
        name: "terms-sales",
        components: {
            default: TermsSales,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - Conditions Générales de vente",
        },
    },
    {
        path: "/terms-service",
        name: "terms-service",
        components: {
            default: TermsService,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - Conditions Générales d'Utilisation",
        },
    },
    {
        path: "/payment/:id",
        props: true,
        name: "payment",
        components: {
            default: Payment,
            navbar: NavBar,
            footer: Footer,
        },
        meta: {
            title: prefix + " - Paiement",
        },
    },
    {
        path: "/:pathMatch(.*)",
        name: "not-found",
        component: () => import("@/views/front/NotFound.vue"),
        meta: {
            title: prefix + " - Page Introuvable",
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
