import React from 'react'
import { Link } from 'react-router-dom'

const Header = () => (
    <header>
        <div class="wrapper">
            <div class="divHeader">
                <a title="Logo" href="index.html" class="header-logo">
                    <svg>
                        <use xlinkHref='#logo' />
                    </svg>
                </a>
                <ul class="navMenu">
                    <li>
                        <Link to='/'>Главная</Link>
                    </li>
                    <li>
                        <Link to='team'>Команда</Link>
                    </li>
                </ul>
            </div>
            <a class="hamburger js-navOpenMenu">
                <span></span>
            </a>
        </div>
    </header>
)

export default Header