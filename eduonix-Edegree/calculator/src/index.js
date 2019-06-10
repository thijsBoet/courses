import React from 'react';
import ReactDOM from 'react-dom';
import './containers/Calculator.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';

ReactDOM.render(<App />, document.getElementById('app'));
registerServiceWorker();
