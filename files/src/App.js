import React from 'react';
import { HashRouter as Router, Switch, Route } from 'react-router-dom';

/** CSS **/
import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import './assets/css/style.css';

/** Layouts **/
import PublicLayoutRoute from "./layouts/PublicLayoutRoute";
import PublicPagesLayoutRoute from './layouts/PublicPagesLayoutRoute';

/** Components **/
import HomePage from './components/screens/home/HomePage';
import PlusPage from './components/screens/plus/PlusPage';
import MyBooking from './components/screens/my-booking/MyBooking';
import SelectParking from './components/screens/select-parking/SelectParking';

function App() {
  return (
    <Router>
      <Switch>
        <PublicLayoutRoute path="/" exact component={HomePage} />
        <PublicPagesLayoutRoute path="/select-parking" exact component={SelectParking} />
        <PublicPagesLayoutRoute path="/plus" exact component={PlusPage} />
        <PublicPagesLayoutRoute path="/reservation" exact component={MyBooking} />
      </Switch>
    </Router>
  );
}

export default App;
