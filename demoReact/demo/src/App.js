import React, {Component} from "react";
import Personne from './Personne';

// class App extends Component{
//     render(){
//         return <h1>Hello World ! </h1>;
//     }
// }

class App extends Component{
    render(){
        return(
            <>
                <Personne nom = "Paul" age = "30" sexe= "homme" /> 
                <Personne nom = "Pierre" age = "35" sexe= "homme" /> 
                <Personne nom = "Sophie" age = "25" sexe= "femme" /> 
            </>

        );
    }
}

export default App; 