import React from "react";
import { Route, Switch} from "react-router-dom";
// import Layout from '../Layout/index';
import MainWrapper from "./MainWrapper";

import HomePage from "../views/HomePage/index";
import ContactPage from "../views/ContactPage/index";

const Router = () => (
  <MainWrapper>
    <main>
      <Switch>
        <Route exact path="/" name="home" component={HomePage} />
        <Route path="/contact" name="contact" component={ContactPage} />
      </Switch>
    </main>
  </MainWrapper>
);

export default Router;
