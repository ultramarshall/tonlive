import React, { Component } from "react";
// import PropTypes from "prop-types";

import Topbar from "../Topbar";
import Footer from "../Footer";

class MainWrapper extends Component {
//   static propTypes = {
//     children: PropTypes.element.isRequired
//   }

  render() {
    return (
      <div className="container">
        <Topbar />
        <div className="row">
          <div className="col-12">{this.props.children}</div>
        </div>
        <Footer />
      </div>
    );
  }
}


export default MainWrapper;
