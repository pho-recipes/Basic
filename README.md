## Real World Example

This is a simple graph for a Twitter clone, in its most fundamental form.

There are three nodes:
1. **Graph**, a Graph (obligatory)
2. **User**, an Actor
3. **Status**, an Object

And, there are five edges:
1. **Post**, from User to Status
2. **Mention**, from Status to User
3. **Follow**, from User to User
4. **Like**, from User to Status
5. **Consume**, from User to both Status and User
