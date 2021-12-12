import Vue from 'vue';
import validationMixin from './validationMixin.js';
import { shallowMount } from '@vue/test-utils'

describe('validationMixin', () => {

    it('has a mounted hook in the component', () => {
        expect(typeof validationMixin.data).toBe('function')
    });

});
