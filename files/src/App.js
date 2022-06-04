import React from 'react';
import { HashRouter as Router, Switch, Route } from 'react-router-dom';

/** CSS **/
import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import './assets/css/index.css';

/** Layouts **/
import PublicLayoutRoute from "./layouts/PublicLayoutRoute";

/** Components **/
import HomePage from './components/screens/home/HomePage';

function App() {
  return (
    <Router>
      <Switch>
        <PublicLayoutRoute path="/" exact component={HomePage} />
      </Switch>
    </Router>
  );
}

export default App;
