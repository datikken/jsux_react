import Drawer from '../components/Drawer';
import {ArticlesList} from '../components/ArticlesList';

export function HomePage()
{
    return (
        <>
            <Drawer>
                <ArticlesList />
            </Drawer>
        </>
    );
}
