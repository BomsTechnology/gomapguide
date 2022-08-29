import axios from "axios";
import { ref } from "vue";
import type { Plan } from "@/stores/plan";
export default function usePayments() {
    const errors = ref("");
    const loading = ref(0);

    async function payWithStripe(item: Plan): Promise<void> {
        errors.value = "";
        try {
            loading.value = 0;
            await axios.post("/api/payment-stripe", item);
            loading.value = 2;
        } catch (error) {
            loading.value = 0;
            errors.value = "Errors";
        }
    }
    return { payWithStripe, loading, errors };
}
