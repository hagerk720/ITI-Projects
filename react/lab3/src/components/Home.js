import React, { useEffect, useState } from "react";
import MusicianCard from "./MusicianCard";

export default function Home() {
  const [artists, setArtists] = useState([]);
  useEffect(() => {
    fetch("http://localhost:3500/artists")
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        setArtists(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);
  return (
    <div className="row">
      <div className="d-flex flex-wrap">
        {artists.map((artist) => {
          return <MusicianCard artist={artist} key={artist.id} />;
        })}
      </div>
    </div>
  );
}
