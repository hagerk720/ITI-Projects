import { Component } from "react";
import "./slider.css";
class SliderClass extends Component {
  curIndex = 0;
  interval;
  showNextImage = () => {
    this.curIndex++;
    const slides = document.querySelectorAll(".slide");
    if (this.curIndex >= slides.length) {
      this.curIndex = 0;
    }
    slides.forEach((slide, index) => {
      if (index === this.curIndex) {
        slide.classList.add("active");
      } else {
        slide.classList.remove("active");
      }
    });
  };

  showPrevImage = () => {
    this.curIndex--;
    const slides = document.querySelectorAll(".slide");
    if (this.curIndex < 0) {
      this.curIndex = slides.length - 1;
    }
    slides.forEach((slide, index) => {
      if (index === this.curIndex) {
        slide.classList.add("active");
      } else {
        slide.classList.remove("active");
      }
    });
  };
  startSlide = () => {
    this.interval = setInterval(() => {
      this.showNextImage();
    }, 1000);
  };
  stopSlide = () => {
    clearInterval(this.interval);
  };

  render() {
    return (
      <div>
        <div className="contenedor">
          <div id="slider">
            <div className="slide active">
              <img src="./Images/one-piece1.jpg" alt="Imagen 1" />
            </div>
            <div className="slide">
              <img src="./Images/one-piece2.jpg" alt="Imagen 2" />
            </div>
            <div className="slide">
              <img src="./Images/one-piece3.jpg" alt="Imagen 3" />
            </div>
          </div>
          <div className="buttons">
            <input type="button" value="Next" onClick={this.showNextImage} />
            <input type="button" value="Prev" onClick={this.showPrevImage} />
            <input type="button" value="Slide" onClick={this.startSlide} />
            <input type="button" value="Stop" onClick={this.stopSlide} />
          </div>
        </div>
      </div>
    );
  }
}

export default SliderClass;
