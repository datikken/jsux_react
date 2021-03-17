import Drawer from '../components/Drawer';
import {ArticlesList} from '../components/ArticlesList';

export function HomePage()
{
    return (
        <>
            <Drawer>
                <h1>Home page git actions test</h1>
                <ArticlesList />
            </Drawer>
        </>
    );
}
