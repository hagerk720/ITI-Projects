import React from "react";

export default function Error() {
  let imgStyle = {
    "object-fit": "cover",
  };
  return (
    <div className="d-flex justify-content-center" style={{ height: "100vh" }}>
      <img
        className="h-50 w-50"
        src="./images/404.svg"
        alt=""
        style={imgStyle}
      />
    </div>
  );
}
