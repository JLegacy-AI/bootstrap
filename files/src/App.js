import React from "react";
import { Switch, BrowserRouter as Router, Route } from "react-router-dom";

/** CSS **/
import "./App.css";
import "bootstrap/dist/css/bootstrap.min.css";
import "./assets/css/index.css";

/** Layouts **/
import PublicMainLayoutRoute from "./layouts/PublicMainLayoutRoute";
import PublicInnerLayoutRoute from "./layouts/PublicInnerLayoutRoute";

/** Components **/
import HomePage from "./components/screens/home/HomePage";
import DetailPageMaraige from "./components/screens/detail/DetailPageMaraige";
import DetailPageAnniversary from "./components/screens/detail/DetailPageAnniversary";
import DetailProfessionalEvent from "./components/screens/detail/DetailPageProfessionalEvent";
import DetailPageReligiousEvent from "./components/screens/detail/DetailPageReligiousEvent";
import PageNotFound from "./components/screens/404/PageNotFound";
import {
  anniversaireData,
  maraigeData,
  profesionnelData,
  religieuxData,
} from "./constants";

function App() {
  return (
    <Router basename="/">
      <Switch>
        <PublicMainLayoutRoute path="/" exact component={HomePage} />
        <PublicInnerLayoutRoute
          path={`/detail/${maraigeData.detail_page}`}
          exact
          component={DetailPageMaraige}
        />
        <PublicInnerLayoutRoute
          path={`/detail/${anniversaireData.detail_page}`}
          exact
          component={DetailPageAnniversary}
        />
        <PublicInnerLayoutRoute
          path={`/detail/${profesionnelData.detail_page}`}
          exact
          component={DetailProfessionalEvent}
        />
        <PublicInnerLayoutRoute
          path={`/detail/${religieuxData.detail_page}`}
          exact
          component={DetailPageReligiousEvent}
        />
        <Route path="*" component={PageNotFound} />
      </Switch>
    </Router>
  );
}

export default App;
