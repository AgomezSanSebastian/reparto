<tr>
    <td>{{ $foods->id }}</td>
    <th scope="food">
        {{ $foods->name }}
    </th>
    <td>{{ $foods->description }}</td>
    <td>
        {{-- <span class="note">{{ $user->created_at->format('d/m/Y') }}</span> --}}
        {{ $foods->restaurant_id }}
    </td>
    <td>
        {{-- <span class="note">{{ optional($user->last_login_at)->format('d/m/Y h:ia') ?: 'N/A' }}</span> --}}
        {{ $foods->price }}
    </td>
    <td class="text-right">
        {{-- @if ($user->trashed())
            <form action="{{ route('users.destroy', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-link"><span class="oi oi-circle-x"></span></button>
            </form>
        @else
            <form action="{{ route('users.trash', $user) }}" method="POST">
                @csrf
                @method('PATCH')
                <a href="{{ route('users.show', $user) }}" </a>
                <a href="{{ route('users.edit', $user) }}" class="btn btn-outline-secondary btn-sm"><span class="oi oi-pencil"></span></a>
                <button type="submit" class="btn btn-outline-danger btn-sm"><span class="oi oi-trash"></span></button>
            </form>
        @endif --}}
        funciones
    </td>
</tr>
<tr class="skills">
    <td>&nbsp;</td>
    <td colspan="1">
        {{-- <span class="note">{{ $user->profile->profession->title }}</span> --}}
    </td>
    {{-- <td colspan="4"><span class="note">{{ $user->skills->implode('name', ', ') }}</span></td> --}}
    <td>nose para que</td>
</tr>
