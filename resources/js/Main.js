import React from 'react';
import ReactDOM from 'react-dom';
import {createBrowserHistory} from "history";
import {
    BrowserRouter as Router,
    Route,
    Switch,
} from 'react-router-dom';

import {ApolloClient, InMemoryCache} from '@apollo/client';
import {ApolloProvider} from '@apollo/client';

import {ArticlePage} from './pages/ArticlePage';
import {SigninPage} from './pages/SigninPage';
import {SignupPage} from './pages/SignupPage';
import {BoardsPage} from './pages/BoardsPage';
import {HomePage} from './pages/HomePage';

const history = createBrowserHistory();

const client = new ApolloClient({
    uri: '/graphql',
    cache: new InMemoryCache()
});

function Main() {
    return (
        <ApolloProvider client={client}>
            <Router history={history}>
                <Switch>
                    <Route exact path="/">
                        <HomePage />
                    </Route>
                    <Route path="/signin">
                        <SigninPage />
                    </Route>
                    <Route path="/signup">
                        <SignupPage />
                    </Route>
                    <Route path="/boards">
                        <BoardsPage />
                    </Route>
                    <Route path="/article/:id">
                        <ArticlePage />
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
