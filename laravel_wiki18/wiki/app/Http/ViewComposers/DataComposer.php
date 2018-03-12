namespace App\Http\ViewComposers;
use Illuminate\View\View;
class DataComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $masyvas = ["user1", "user2", "user3"];
        $view->with('count',  count($masyvas));
    }
}