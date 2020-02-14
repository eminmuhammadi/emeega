import React, { Component } from "react";
import Loader from './Loader';

class Related extends Component {
    render() {

      const numbers = [1, 2, 3];
      const items = numbers.map((number) =>
        <div className="col-md-4" key={number.toString()}>
          <Loader/>
        </div>
      );

      return (
        <div className="w-100 bg-light pt-3 pb-3">
          <div className="container">
            <h4 className="pt-1 pb-3">Related posts</h4>
              <div className="row">
                  {items}
              </div>
          </div>
        </div>
      );
    }
}


export default Related;
