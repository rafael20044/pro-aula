import { Routes } from '@angular/router';
import { PrincipalComponent } from './page/principal/principal.component';
import { NosotrosComponent } from './page/nosotros/nosotros.component';
import { HomeComponent } from './page/home/home.component';

export const routes: Routes = [
    {path:'', redirectTo:'/principal', pathMatch: 'full'},
    {path:'principal', component: PrincipalComponent, title:'Principal' },
    {path:'home', component: HomeComponent, title:'Home'},
    {path:'nosotros', component: NosotrosComponent, title:'Nosotros'}
];
