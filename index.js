import './index.scss';

import includes from './js/includes';

function ready (callback) {
  document.addEventListener('DOMContentLoaded', () => callback());
}

ready(function () {
  // Initialize your functions here
  console.log(includes('Dom is ready!'));
});