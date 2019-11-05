import React, {Component} from 'react'

class MemberSearch extends Component {
    render () {
        return (
            <section class="pageHeaderForm">
                <div class="wrapper">
                    <h2>Команда</h2>
                    <form class="" method="get" action="search.html">
                        <input class="js-widthInput" type="text" value="" placeholder="Поиск сотрудников" name="s" AUTOCOMPLETE="off"></input>
                        <button class="" type="submit">
                            Поиск
                        </button>
                        <div class="hiddenSearch js-widthBlock">
                            <ul>
                                <li><a href="#">vfv</a></li>
                            </ul>
                        </div>
                    </form>

                </div>
            </section>
        )
    }
}

export default MemberSearch