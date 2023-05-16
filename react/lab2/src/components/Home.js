import React, { Component } from "react";
import Registration from "./Registration";
import Users from "./Users";

export default class Home extends Component {
  usersData = [];
  constructor(props) {
    super(props);
    console.log(props);
    this.state = {
      usersData: this.usersData,
    };
  }
  handleData = (newData) => {
    console.log(newData);
    this.usersData.push(newData);
    this.setState({ usersData: this.usersData });
  };
  render() {
    return (
      <div className="d-flex align-items-center">
        <Registration changeValue={this.handleData} />
        <Users className="w-100 " users={this.state.usersData} />
      </div>
    );
  }
}
