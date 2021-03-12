import React from 'react';
import ReactDOM from 'react-dom';
import Drawer from './Drawer'

function App() {
    return (
        <>
            <Drawer/>
        </>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
