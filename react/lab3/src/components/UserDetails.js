import React from "react";
import { useParams } from "react-router-dom";

export default function UserDetails() {
  let { id } = useParams();
  return (
    <div>
      <div className="card mx-auto mt-5" style={{ maxWidth: "30rem" }}>
        <div
          className="card-header d-flex align-items-center position-relative justify-content-center"
          style={{ backgroundColor: "#10334e" }}
        >
          <h5 className="card-title mb-0 mt-5" style={{ color: " aliceblue" }}>
            Hager
          </h5>
        </div>

        <div className="card-body d-flex flex-column justify-content-center">
          <div className="text-center mb-3">
            <div className="fw-bold"></div>
            <div>Khaled</div>
          </div>
          <div className="text-center">
            <div className="fw-bold"></div>
            <div>25</div>
          </div>
        </div>
      </div>
    </div>
  );
}
