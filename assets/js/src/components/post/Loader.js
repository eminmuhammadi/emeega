import React, { Component } from "react";

class Loader extends Component {
    render() {

      return (
        <div className="container">
          <div className="loader-item">

              <div className="loader-col-12">
                <div className="loader-picture"></div>
              </div>

              <div className="loader-col-12 pt-5">
                  <div className="loader-row">
                      <div className="loader-col-10 big"></div>
                      <div className="loader-col-2 empty big"></div>
                      <div className="loader-col-4"></div>
                      <div className="loader-col-8 empty"></div>
                      <div className="loader-col-6"></div>
                      <div className="loader-col-6 empty"></div>
                      <div className="loader-col-12"></div>
                  </div>
              </div>

            </div>
        </div>
      );
    }
}


export default Loader;
