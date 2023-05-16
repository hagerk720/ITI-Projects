import React, { Component } from "react";
import { Link } from "react-router-dom";
import "./Registration.css";
export default class Registration extends Component {
  constructor() {
    super();
    this.state = {
    };
  }
  handleChange = (e) => {
    e.preventDefault();
    this.props.changeValue({
      fName: this.fname.value,
      lName: this.lname.value,
      age: this.age.value,
    });
  };
  setFirstName = (fname) => {
    this.fname = fname;
  };

  setLastName = (lname) => {
    this.lname = lname;
  };

  setAge = (age) => {
    this.age = age;
  };
  render() {
    return (
      <div>
        <form onSubmit={this.handleChange.bind(this)}>
          <div className="card d-flex flex-column align-items-center">
            <h2>Registration</h2>
            <div class="group">
              <input
                type="text"
                required
                name="fName"
                ref={this.setFirstName}
              />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>First Name</label>
            </div>

            <div class="group">
              <input type="text" required name="lName" ref={this.setLastName} />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Last Name</label>
            </div>
            <div class="group">
              <input type="number" required name="age" ref={this.setAge} />
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Age</label>
            </div>
            <input type="submit" value="Go" />
          </div>
        </form>
      </div>
    );
  }
}
