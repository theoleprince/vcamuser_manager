import { Injectable } from '@angular/core';
import { Router, CanActivate } from '@angular/router';
import { AuthService } from '../_services/auth.service';

@Injectable()
export class AuthGuard implements CanActivate {

  constructor(
      private authService: AuthService, 
      public router: Router) 
    {}

  canActivate(): boolean {

    if (!this.authService.isAuthenticated()) {
      this.router.navigate(['login']);
      return false;
    }

    return true;
  }
}