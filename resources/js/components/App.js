import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './Header'

class App extends Component {
    render () {
        return (
            <BrowserRouter>
                <Header />
                <Content />
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))

// import React, { Component } from 'react';
// import ReactDOM from 'react-dom';
//
// export default class Example extends Component {
//     render() {
//         return (
//             <div className="container">
//                 <div className="row justify-content-center">
//                     <div className="col-md-8">
//                         <div className="card">
//                             <div className="card-header">Example Component</div>
//
//                             <div className="card-body">I'm an example component!</div>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         );
//     }
// }
//
// if (document.getElementById('example')) {
//     ReactDOM.render(<Example />, document.getElementById('example'));
// }
