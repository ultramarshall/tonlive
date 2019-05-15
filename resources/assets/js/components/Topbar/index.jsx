import React,{Component} from "react";
import axios from "axios";
import { Link } from "react-router-dom";



export default class Topbar extends React.Component {
  render(){ return(
      <nav className="navbar navbar-expand-lg navbar-dark">
        <div className="container">
          <div className="navbar-left">
            <button className="navbar-toggler" type="button">☰</button>
            <a className="navbar-brand" href="#">
              <img className="logo-dark" src="../assets/img/logo-dark.png" alt="logo" />
              <img className="logo-light" src="../assets/img/logo-light.png" alt="logo" />
            </a>
          </div>
          <section className="navbar-mobile">
            <nav className="nav nav-navbar ml-auto">
              <a className="nav-link active" href="#">Home</a>
              <a className="nav-link" href="#">Features</a>
              <a className="nav-link" href="#">Pricing</a>
              <a className="nav-link" href="#">Contact</a>
            </nav>
          </section>
        </div>
      </nav>
  )}
};


// export default Topbar;
