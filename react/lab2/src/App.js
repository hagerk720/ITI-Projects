import logo from "./logo.svg";
import "./App.css";
import { BrowserRouter, Route, Routes } from "react-router-dom";
import Header from "./components/Header";
import Footer from "./components/Footer";
import Home from "./components/Home";
import Error from "./components/Error";
import UserDetails from "./components/UserDetails";

function App() {
  return (
    <div>
      <div className="allComp">
        <BrowserRouter>
          <div className="header">
            <Header />
          </div>
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="*" element={<Error />} />
            <Route path="/users/:id" element={<UserDetails />} />
          </Routes>
          <div className="header">
            <Footer />
          </div>
        </BrowserRouter>
      </div>
    </div>
  );
}

export default App;
