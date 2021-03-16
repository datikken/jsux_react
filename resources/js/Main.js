import React from 'react';
import ReactDOM from 'react-dom';
import {Route, Switch} from "react-router-dom";
import {createBrowserHistory} from "history";
import {BrowserRouter as Router} from "react-router-dom";
import {ApolloClient, InMemoryCache} from '@apollo/client';
import {ApolloProvider} from '@apollo/client';

import {Article} from './pages/Article';
import {Signin} from './pages/Signin'
import {Signup} from './pages/Signup'
import {Boards} from './pages/Boards';
import {Home} from './pages/Home';

const history = createBrowserHistory();

const client = new ApolloClient({
    uri: '/graphql',
    cache: new InMemoryCache()
})

function Main() {
    return (
        <ApolloProvider client={client}>
            <Router history={history}>
                <Switch>
                    <Route exact path="/">
                        <Home/>
                    </Route>
                    <Route path="signin">
                        <Signin/>
                    </Route>
                    <Route path="signup">
                        <Signup/>
                    </Route>
                    <Route path="boards">
                        <Boards/>
                    </Route>
                    <Route path="article/:slug">
                        <Article />
                    </Route>
                </Switch>
            </Router>
        </ApolloProvider>
    );
}

export default Main;

if (document.getElementById('app')) {
    ReactDOM.render(<Main/>, document.getElementById('app'));
}
