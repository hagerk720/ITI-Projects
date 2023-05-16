import { Component } from "react";
class TypierClass extends Component {
  constructor() {
    super();
    this.state = {
      name: "",
    };
  }
  getData = (e) => {
    this.setState({ name: e.target.value });
  };
  reset = () => {
    this.setState({ name: "" });
  };
  render() {
    return (
      <div>
        <input type="text" value={this.state.name} onChange={this.getData} />
        <p>{this.state.name}</p>
        <button
          type="button"
          value="Reset"
          onClick={this.reset}
          id="input-submit"
        >
          Reset
        </button>
      </div>
    );
  }
}

export default TypierClass;
