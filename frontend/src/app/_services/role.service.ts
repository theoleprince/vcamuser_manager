import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import * as Routes from '../Routes'; 
import { CreateRoleComponent } from '../create-role/create-role.component';

@Injectable({
  providedIn: 'root',
})
export class RoleService {

  constructor(private http: HttpClient) { }

  add(name: string, creator: number, description = null): Promise<any> {
        let datas = {
            'name': name,
            'creator_id': creator,
            'is_active': true,
            'description': description
        }
        return this.http.post<any>(Routes.ROLES, datas).toPromise();
    }

  findAll(): Promise<any> {
    return this.http.get<any>(Routes.ROLES).toPromise();
  }
}