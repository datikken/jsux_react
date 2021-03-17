import React from "react";
import {
    useParams
} from "react-router-dom";

import Drawer from '../components/Drawer';
import {Article} from '../components/Article';

export function ArticlePage() {
    let { id } = useParams();

    return (
        <Drawer>
            <Article id={id} />
        </Drawer>
    );
}
