import React from "react";
import "./Users.css";
export default function Users(props) {
  console.log(props);
  let RenderStudents = (All) => {
    if (All) {
      return All.map((user) => {
        return (
          <tr>
            <td>{user.fName}</td>
            <td>{user.lName}</td>
            <td>{user.age}</td>
          </tr>
        );
      });
    } else {
      return (
        <div>
          <p>No Students</p>
        </div>
      );
    }
  };
  return (
    <div className="w-100 mb-5 mx-5 align-self-start">
      <h2>Users</h2>
      <table className="container">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
          </tr>
        </thead>
        <tbody>{RenderStudents(props.users)}</tbody>
      </table>
    </div>
  );
}
