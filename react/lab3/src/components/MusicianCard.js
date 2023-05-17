import React from "react";
import "./MusicianCard.css";
export default function MusicianCard({ artist }) {
  const artistDetailsPageUrl = `/artists/${artist.id}`;

  return (
    <div className="mx-5">
      <div className="card-grid-space">
        <div className="num">{artist.id}</div>
        <a
          className="musician-card"
          href={artistDetailsPageUrl}
          style={{ backgroundImage: `url(${artist.cover})` }}
        >
          <div>
            <h1>{artist.name}</h1>
            <div className="tags">
              <div className="tag">Artists</div>
            </div>
          </div>
        </a>
      </div>
    </div>
  );
}
