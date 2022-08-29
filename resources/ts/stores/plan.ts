import { defineStore } from "pinia";
import plans from "@/data/plan.json";
import homePlans from "@/data/plan.json";

export type Plan = {
    id: string;
    priceId: string;
    type: string;
    title: string;
    price: number;
    period: string;
    popular: boolean;
    bgcolor: Object;
    color: Object;
    infos: Array<string>;
};

export const usePlanStore = defineStore("plan", {
    state: () => ({
        plans: plans,
    }),

    getters: {
        planById(state) {
            return (id: string): Array<Plan> =>
                state.plans.filter(
                    (plan) => plan.id === id
                ) as unknown as Array<Plan>;
        },
    },
});
