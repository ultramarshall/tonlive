import React from "react";
import axios from "axios";

export default class HomePage extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      persons:[]
    };
  }
  componentDidMount() {
    axios.get(`http://localhost/laravel_react/api/test`)
      .then(res => {
        const persons = res.data;
        this.setState({ persons });
        // console.log(persons)
      })
  }

  render(){ return(
  <div data-provide="slider" data-autoplay="true" data-autoplay-speed={1000}>
    <div><img src={this.state.persons.img1} /></div>
    <div><img src={this.state.persons.img2} /></div>
    <div><img src={this.state.persons.img3}/></div>
</div>
  )}
};

// export default HomePage;
