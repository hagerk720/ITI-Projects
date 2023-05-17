import React, { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
export default function ArtistDetails() {
  const [artist, setArtist] = useState([]);
  let { id } = useParams();
  useEffect(() => {
    fetch(`http://localhost:3500/artists/${id}`)
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        setArtist(data);
        console.log(data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, []);
  return (
    <div>
      <div className="container">
        <div
          className="jumbotron text-white centered"
          style={{ backgroundColor: "#264184" }}
        >
          <div id="header" className="row">
            <div className="col-lg-4 offset-lg-4">
              <h1 className="text-center display-4">{artist.name}</h1>
            </div>
            <div className="img-thumbnail col-lg-6 offset-lg-3">
              <img src={`/${artist.cover}`} alt="" className="img-fluid" />
              <div className="caption text-center text-muted">{artist.bio}</div>
            </div>
          </div>
          <div id="biography" className="container row mt-5">
            <div className="col-lg-4 offset-lg-2">
              <div>
                <h3>Biography</h3>
                <p>{artist.bio}</p>
              </div>
            </div>
            <div className="col-lg-4"></div>
          </div>
          <div id="discography" className="row mt-5">
            <div className="col-lg-12 text-center">
              <h3>Albums</h3>
            </div>
            <div className="col-lg-4 offset-lg-2 mt-3">
              <div>
                <ul style={{ listStyleType: "none", padding: 0 }}>
                  {artist.albums &&
                    artist.albums.map((album) => (
                      <li
                        key={album.albumId}
                        style={{
                          display: "inline-flex",
                          alignItems: "center",
                          marginBottom: "1rem",
                        }}
                      >
                        <img
                          src={`/${album.cover}`}
                          alt={album.title}
                          style={{ width: "100px", marginRight: "1rem" }}
                        />
                        <p style={{ margin: 0 }}>
                          <b>{album.year}</b> - {album.title}
                        </p>
                      </li>
                    ))}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}
