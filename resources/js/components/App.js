import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router} from "react-router-dom";
import {Route, Switch} from "react-router-dom";
import {Home} from '../pages/Home';
import {Signin} from '../pages/Signin'
import {Signup} from '../pages/Signup'
import {createBrowserHistory} from "history";
import {ApolloClient, InMemoryCache} from '@apollo/client';
import {gql} from '@apollo/client';

const history = createBrowserHistory();
const client = new ApolloClient({
    uri: '/graphql',
    cache: new InMemoryCache()
});

client
.query({
    query: gql`
        query articles {
            articles {
                title,
                author {
                    email
                }
            }
        }
    `
})
.then(result => console.log(result));

function App() {
    return (
        <Router history={history}>
            <Switch>
                <Route exact path="/">
                    <Home/>
                </Route>
                <Route path="/signin">
                    <Signin/>
                </Route>
                <Route path="/signup">
                    <Signup/>
                </Route>
            </Switch>
        </Router>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App/>, document.getElementById('app'));
}
