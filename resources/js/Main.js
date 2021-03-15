import React from 'react';
import ReactDOM from 'react-dom';
import {Route, Switch} from "react-router-dom";
import {createBrowserHistory} from "history";
import {BrowserRouter as Router} from "react-router-dom";
import {ApolloClient, InMemoryCache} from '@apollo/client';

import { gql, useMutation } from '@apollo/client';

import {Signin} from './pages/Signin'
import {Signup} from './pages/Signup'
import {Boards} from './pages/Boards';
import {Home} from './pages/Home';

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

const ADD_TODO = gql`
    mutation register($type: String!) {
        register(type: $type) {
            name,
            email,
            password
        }
    }
`;

function Main() {
    return (
        <Router history={history}>
            <Switch>
                <Route exact path="/">
                    <Home />
                </Route>
                <Route path="/signin">
                    <Signin/>
                </Route>
                <Route path="/signup">
                    <Signup/>
                </Route>
                <Route path="/boards">
                    <Boards/>
                </Route>
            </Switch>
        </Router>
    );
}

export default Main;

if (document.getElementById('app')) {
    ReactDOM.render(<Main/>, document.getElementById('app'));
}
