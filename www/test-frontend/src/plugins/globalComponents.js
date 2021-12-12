import BaseInput from '@/shared/components/Inputs/BaseInput.vue';
import BaseDropdown from '@/shared/components/BaseDropdown.vue';
import Card from '@/shared/components/Cards/Card.vue';
import Modal from '@/shared/components/Modal.vue';
import StatsCard from '@/shared/components/Cards/StatsCard.vue';
import BaseButton from '@/shared/components/BaseButton.vue';
import Badge from '@/shared/components/Badge.vue';
import BaseCheckbox from '@/shared/components/Inputs/BaseCheckbox.vue';
import BaseRadio from "@/shared/components/Inputs/BaseRadio";
import BaseProgress from "@/shared/components/BaseProgress";
import BasePagination from "@/shared/components/BasePagination";
import BaseAlert from "@/shared/components/BaseAlert";
import BaseNav from "@/shared/components/Navbar/BaseNav";
import BaseHeader from '@/shared/components/BaseHeader';
import { ValidationProvider, ValidationObserver } from 'vee-validate';
import { Input, Tooltip, Popover } from 'element-ui';
/**
 * You can register global shared/components here and use them as a plugin in your main Vue instance
 */

const GlobalComponents = {
  install(Vue) {
    Vue.component(Badge.name, Badge);
    Vue.component(BaseAlert.name, BaseAlert);
    Vue.component(BaseButton.name, BaseButton);
    Vue.component(BaseCheckbox.name, BaseCheckbox);
    Vue.component(BaseHeader.name, BaseHeader);
    Vue.component(BaseInput.name, BaseInput);
    Vue.component(BaseDropdown.name, BaseDropdown);
    Vue.component(BaseNav.name, BaseNav);
    Vue.component(BasePagination.name, BasePagination);
    Vue.component(BaseProgress.name, BaseProgress);
    Vue.component(BaseRadio.name, BaseRadio);
    Vue.component(Card.name, Card);
    Vue.component(Modal.name, Modal);
    Vue.component(StatsCard.name, StatsCard);
    Vue.component(Input.name, Input);
    Vue.component('validation-provider', ValidationProvider)
    Vue.component('validation-observer', ValidationObserver)
    Vue.use(Tooltip);
    Vue.use(Popover);
  }
};

export default GlobalComponents;
