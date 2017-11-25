import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);
const defaultState = {
  isAuthenticated: true,
  someData: []
};

const inBrowser = typeof window !== 'undefined';
const state = (inBrowser && window.__INITIAL_STATE__) ?
  window.__INITIAL_STATE__ : defaultState;

const store = new Vuex.Store({
  state,
  getters: {
    isAuthenticated: (currentState) => {
      return currentState.isAuthenticated;
    },
    someData: (currentState) => {
      return currentState.someData;
    }
  },
  actions: {
    getData(contextStore){
      contextStore.commit('getData', {someData: ["test", "test2", "test3"]});
    }
  },
  mutations: {
    getData(currentState, data){
      currentState.someData = data.someData;
    }
  }
});


export default store;
