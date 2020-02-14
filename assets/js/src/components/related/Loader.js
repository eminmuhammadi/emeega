import React, { Component } from "react";


class Loader extends Component {

  constructor(props) {
    super(props);
  }

  render() {
    return (
      <div className="loader-item">
          <div className="loader-col-12">
              <div className="loader-picture"></div>
              <div className="loader-row">
                <div className="loader-col-4"></div>
                <div className="loader-col-8 empty"></div>
                <div className="loader-col-12"></div>
              </div>
          </div>

          <div className="loader-col-2">
              <div className="loader-avatar"></div>
          </div>

          <div>
              <div className="loader-row">
                <div className="loader-col-12"></div>
                <div className="loader-col-2"></div>
                <div className="loader-col-10 empty"></div>
                <div className="loader-col-8 big"></div>
                <div className="loader-col-4 big empty"></div>
              </div>
          </div>
      </div>
    );
  }
};
export default Loader;
