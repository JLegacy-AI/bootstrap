import React from "react";
import { Switch, BrowserRouter, Route } from "react-router-dom";

/** CSS **/
import "./App.css";
import "bootstrap/dist/css/bootstrap.min.css";
import "./assets/css/index.css";

/** Layouts **/
import PublicMainLayoutRoute from "./layouts/PublicMainLayoutRoute";
import PublicInnerLayoutRoute from "./layouts/PublicInnerLayoutRoute";

/** Components **/
import HomePage from "./components/screens/home/HomePage";
import DetailPage from "./components/screens/detail/DetailPage";
import PageNotFound from "./components/screens/404/PageNotFound";

function App() {
  return (
    <BrowserRouter basename="/">
      <Switch>
        <PublicMainLayoutRoute path="/" exact component={HomePage} />
        <PublicInnerLayoutRoute path="/detail" exact component={DetailPage} />
        <Route path="*">
          <PageNotFound />
        </Route>
      </Switch>
    </BrowserRouter>
  );
}

export default App;
