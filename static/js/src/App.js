import React, { Component } from "react";
import Routes from '../Routes';

import Related from './components/related/Related.js';
import Post from './components/post/Post.js';
import Header from './components/header/Header.js';

class App extends Component {
    render() {

      return (
        <div>
          <Header/>
          <Post/>
          <Related/>
        </div>
      );
    }
}


export default App;
