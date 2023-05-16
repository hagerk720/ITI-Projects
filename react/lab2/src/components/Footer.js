import React from "react";

export default function Footer() {
  var style = {
    backgroundColor: "#F8F8F8",
    borderTop: "1px solid #E7E7E7",
    textAlign: "center",
    padding: "20px",
    position: "fixed",
    left: "0",
    bottom: "0",
    height: "60px",
    width: "100%",
  };
  return (
    <footer className="bg-light text-center text-lg-start" style={style}>
      <div className="text-center mb-3">© 2023 Copyright: Hager Khaled</div>
    </footer>
  );
}
